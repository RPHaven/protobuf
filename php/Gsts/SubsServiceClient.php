<?php
// GENERATED CODE -- DO NOT EDIT!

namespace RpHaven\Protobuf\Gsts;

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
     * @param \RpHaven\Protobuf\Gsts\MemberSub $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Session(\RpHaven\Protobuf\Gsts\MemberSub $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/rphaven.gsts.SubsService/Session',
        $argument,
        ['\RpHaven\Protobuf\Gsts\SubAccepted', 'decode'],
        $metadata, $options);
    }

}
