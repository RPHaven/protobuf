<?php

declare(strict_types=1);

use Google\Protobuf\Timestamp;
use Rphaven\Gsts\V1\ConsumeMemberToken;
use Rphaven\Gsts\V1\Meet;
use Rphaven\Gsts\V1\Member;
use Rphaven\Gsts\V1\SubsServiceClient;
use Rphaven\Gsts\V1\Token;
use Rphaven\Gsts\V1\Venue;
use RpHaven\Uid\Factory\MemberUid;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Uid\UuidV6;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__, 2) . '/.env');

$client = new SubsServiceClient(getenv('SUBS_SERVER'), [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$memberFactory = new MemberUid();

$volunteerId = $memberFactory->member(new DateTimeImmutable('-48 hours'))->toBinary();
$playerId = $memberFactory->member(new DateTimeImmutable('-1 years'))->toBinary();

$member = new Member([
    'id'        => $volunteerId,
    'username'  => 'shrikeh',
    'name'      => 'Barney',
]);

$volunteer = new Member([
    'id'        => $playerId,
    'username'  => 'oli',
    'name'      => 'Oli',
]);


$now = new Timestamp();
$now->fromDateTime(new DateTime());

$token = new Token([
    'id' => UuidV6::v6()->toBinary(),
    'issued' => $now,
    'issue_number' => 3,
    'member' => $member->getId(),
    'status' => 0,
    'signature' => UuidV6::v6()->toBinary(),
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

$consumeMemberToken = new ConsumeMemberToken([
    'member' => $member,
    'volunteer' => $volunteer,
    'meet'  => $meet,
    'tokens' => [$token]
]);

$result = $client->session($consumeMemberToken)->wait();

var_dump($result);
