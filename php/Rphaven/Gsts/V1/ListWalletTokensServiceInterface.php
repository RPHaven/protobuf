<?php
# Generated by the protocol buffer compiler (roadrunner-server/grpc). DO NOT EDIT!
# source: rphaven/gsts/v1/list_wallet_tokens_service.proto

namespace Rphaven\Gsts\V1;

use Spiral\RoadRunner\GRPC;

interface ListWalletTokensServiceInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "rphaven.gsts.v1.ListWalletTokensService";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ListTokensRequest $in
    * @return ListTokensResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function ListTokens(GRPC\ContextInterface $ctx, ListTokensRequest $in): ListTokensResponse;
}
