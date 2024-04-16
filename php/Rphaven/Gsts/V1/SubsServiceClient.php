<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Rphaven\Gsts\V1;

/**
 */
class SubsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Rphaven\Gsts\V1\ConsumeMemberToken $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Session(\Rphaven\Gsts\V1\ConsumeMemberToken $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rphaven.gsts.v1.SubsService/Session',
        $argument,
        ['\Rphaven\Gsts\V1\TokensConsumed', 'decode'],
        $metadata, $options);
    }

}
