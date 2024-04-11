<?php

declare(strict_types=1);

use RpHaven\Protobuf\Gsts\MemberSub;
use RpHaven\Protobuf\Gsts\SubsServiceClient;
use Symfony\Component\Uid\UuidV6;

require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->bootEnv(dirname(__DIR__, 2) . '/.env');

$client = new SubsServiceClient(getenv('SUBS_SERVER'), [
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$member = 'https://rphaven.co.uk/member/123456';
$volunteerId = UuidV6::v6()->toBinary();

$memberSub = new MemberSub([
    'volunteer_id' => $volunteerId,
    'member_uri' => $member,
]);

$accepted = $client->session($memberSub)->wait();

var_dump($accepted);
