<?php

declare(strict_types=1);

use Google\Protobuf\Timestamp;
use Rphaven\Gsts\V1\ConsumeMemberToken;
use Rphaven\Gsts\V1\ConsumptionDetails;
use Rphaven\Gsts\V1\Meet;
use Rphaven\Gsts\V1\Member;
use Rphaven\Gsts\V1\Signature;
use Rphaven\Gsts\V1\SubsServiceClient;
use Rphaven\Gsts\V1\Token;
use Rphaven\Gsts\V1\Venue;
use RpHaven\Uid\Factory\MemberUid;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Uid\UuidV6;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__, 2) . '/.env');

$client = new SubsServiceClient(getenv('GSTS_SERVER'), [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$memberFactory = new MemberUid();

$volunteerId = $memberFactory->member(new DateTimeImmutable('-48 hours'))->toBinary();
$playerId = $memberFactory->member(new DateTimeImmutable('-1 years'))->toBinary();

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


$wallet = new \Rphaven\Gsts\V1\Wallet([
    'id' => UuidV6::v6()->toBinary(),
    'member' => $player
]);

$now = new Timestamp();
$now->fromDateTime(new DateTime());

$token = new Token([
    'id' => UuidV6::v6()->toBinary(),
    'issued' => $now,
    'issue_number' => 3,
    'member' => $player->getId(),
    'signature' => new Signature([
        'key'   => UuidV6::v6()->toBinary(),
        'hash'  => UuidV6::v6()->toBinary(),
    ]),
]);

$venue = new Venue([
    'latitude' => 51.540099742514755,
    'longitude' => 0.002988080601663523,
    'accuracy'  => 5,
]);

$meet = new Meet([
    'id' => UuidV6::v6()->toBinary(),
    'name' => 'Escape Bar',
    'venue' => $venue,
]);

$consumptionDetails = new ConsumptionDetails([
    'wallet' => $wallet,
    'volunteer' => $volunteer,
    'meet'  => $meet,
]);

$consumeMemberToken = new ConsumeMemberToken([
    'consumption_details' => $consumptionDetails,
    'tokens' => [$token]
]);

$result = $client->session($consumeMemberToken)->wait();

var_dump($result[0]->serializeToJsonString());
