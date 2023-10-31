<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for listing patch jobs.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListPatchJobsResponse</code>
 */
class ListPatchJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of patch jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchJob patch_jobs = 1;</code>
     */
    private $patch_jobs;
    /**
     * A pagination token that can be used to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\PatchJob[]|\Google\Protobuf\Internal\RepeatedField $patch_jobs
     *           The list of patch jobs.
     *     @type string $next_page_token
     *           A pagination token that can be used to get the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of patch jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchJob patch_jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatchJobs()
    {
        return $this->patch_jobs;
    }

    /**
     * The list of patch jobs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchJob patch_jobs = 1;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchJob[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatchJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\PatchJob::class);
        $this->patch_jobs = $arr;

        return $this;
    }

    /**
     * A pagination token that can be used to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token that can be used to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
