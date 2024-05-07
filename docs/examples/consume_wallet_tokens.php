<?php

declare(strict_types=1);

use Google\Protobuf\Timestamp;
use Rphaven\Common\Utils\Factory\Uid\ChainFactoryFactoryGrpc;
use Rphaven\Common\V1\UidType;
use Rphaven\Gsts\V1\ConsumeMemberToken;
use Rphaven\Gsts\V1\ConsumeWalletTokensRequest;
use Rphaven\Gsts\V1\ConsumeWalletTokensServiceClient;
use Rphaven\Gsts\V1\ConsumptionDetails;
use Rphaven\Gsts\V1\Meet;
use Rphaven\Gsts\V1\Member;
use Rphaven\Gsts\V1\Signature;
use Rphaven\Gsts\V1\SubsServiceClient;
use Rphaven\Gsts\V1\Token;
use Rphaven\Gsts\V1\TokenSignature;
use Rphaven\Gsts\V1\Venue;
use Rphaven\Gsts\V1\VenueMeet;
use Rphaven\Gsts\V1\Wallet;
use RpHaven\Uid\Factory\MemberUid;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Uid\UuidV6;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__, 2) . '/.env');



$memberFactory = new MemberUid();
$uidFactory = ChainFactoryFactoryGrpc::init();

$volunteerId = $uidFactory->toGrpc($memberFactory->member(new DateTimeImmutable('-48 hours')));

$playerId = $uidFactory->toGrpc($memberFactory->member(new DateTimeImmutable('-1 years')));

$player = new Member([
    'id'        => $playerId,
    'username'  => 'shrikeh',
    'name'      => 'Barney',
]);

$volunteer = new Member([
    'id'        => $volunteerId,
    'username'  => 'oli',
    'name'      => 'Oli',
]);


$wallet = new Wallet([
    'id' => new Rphaven\Common\V1\Uid([
        'binary' => UuidV6::v6()->toBinary(),
        'type' => UidType::UID_TYPE_UUID
    ]),
    'member' => $player
]);

$now = new Timestamp();
$now->fromDateTime(new DateTime());

$token = new Token([
    'id' => new Rphaven\Common\V1\Uid([
        'binary' => UuidV6::v6()->toBinary(),
        'type' => UidType::UID_TYPE_UUID,
    ]),
    'issued' => $now,
    'issue_number' => 3,
    'member' => $player->getId(),
    'signature' => new TokenSignature([
        'key'   => new Rphaven\Common\V1\Uid([
            'binary' => UuidV6::v6()->toBinary(),
            'type' => UidType::UID_TYPE_UUID,
        ]),
        'hash'  => UuidV6::v6()->toBinary(),
    ]),
]);

$venue = new VenueMeet([
    'latitude' => 51.540099742514755,
    'longitude' => 0.002988080601663523,
    'accuracy'  => 5,
]);

$meet = new Meet([
    'id' => new Rphaven\Common\V1\Uid([
        'binary' => UuidV6::v6()->toBinary(),
        'type' => UidType::UID_TYPE_UUID,
    ]),
    'name' => 'Escape Bar',
    'venue' => $venue,
]);

$consumptionDetails = new ConsumptionDetails([
    'wallet' => $wallet,
    'volunteer' => $volunteer,
    'meet'  => $meet,
]);

$consumeMemberToken = new ConsumeWalletTokensRequest([
    'consumption_details' => $consumptionDetails,
    'tokens' => [$token]
]);

$client = new ConsumeWalletTokensServiceClient(getenv('GSTS_SERVER'), [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$result = $client->ConsumeWalletTokens($consumeMemberToken)->wait();

var_dump($result[0]->serializeToJsonString());
