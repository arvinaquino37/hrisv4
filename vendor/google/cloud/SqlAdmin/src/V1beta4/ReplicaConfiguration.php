<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Read-replica configuration for connecting to the primary instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.ReplicaConfiguration</code>
 */
class ReplicaConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always <b>sql#replicaConfiguration</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * MySQL specific configuration when replicating from a MySQL on-premises
     * primary instance. Replication configuration information such as the
     * username, password, certificates, and keys are not stored in the instance
     * metadata. The configuration information is used only to set up the
     * replication connection and is stored by MySQL in a file named
     * <b>master.info</b> in the data directory.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.MySqlReplicaConfiguration mysql_replica_configuration = 2;</code>
     */
    private $mysql_replica_configuration = null;
    /**
     * Specifies if the replica is the failover target. If the field is set to
     * <b>true</b> the replica will be designated as a failover replica. In
     * case the primary instance fails, the replica instance will be promoted as
     * the new primary instance.  <p>Only one replica can be specified as failover
     * target, and the replica has to be in different zone with the primary
     * instance.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue failover_target = 3;</code>
     */
    private $failover_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always <b>sql#replicaConfiguration</b>.
     *     @type \Google\Cloud\Sql\V1beta4\MySqlReplicaConfiguration $mysql_replica_configuration
     *           MySQL specific configuration when replicating from a MySQL on-premises
     *           primary instance. Replication configuration information such as the
     *           username, password, certificates, and keys are not stored in the instance
     *           metadata. The configuration information is used only to set up the
     *           replication connection and is stored by MySQL in a file named
     *           <b>master.info</b> in the data directory.
     *     @type \Google\Protobuf\BoolValue $failover_target
     *           Specifies if the replica is the failover target. If the field is set to
     *           <b>true</b> the replica will be designated as a failover replica. In
     *           case the primary instance fails, the replica instance will be promoted as
     *           the new primary instance.  <p>Only one replica can be specified as failover
     *           target, and the replica has to be in different zone with the primary
     *           instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always <b>sql#replicaConfiguration</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always <b>sql#replicaConfiguration</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * MySQL specific configuration when replicating from a MySQL on-premises
     * primary instance. Replication configuration information such as the
     * username, password, certificates, and keys are not stored in the instance
     * metadata. The configuration information is used only to set up the
     * replication connection and is stored by MySQL in a file named
     * <b>master.info</b> in the data directory.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.MySqlReplicaConfiguration mysql_replica_configuration = 2;</code>
     * @return \Google\Cloud\Sql\V1beta4\MySqlReplicaConfiguration|null
     */
    public function getMysqlReplicaConfiguration()
    {
        return isset($this->mysql_replica_configuration) ? $this->mysql_replica_configuration : null;
    }

    public function hasMysqlReplicaConfiguration()
    {
        return isset($this->mysql_replica_configuration);
    }

    public function clearMysqlReplicaConfiguration()
    {
        unset($this->mysql_replica_configuration);
    }

    /**
     * MySQL specific configuration when replicating from a MySQL on-premises
     * primary instance. Replication configuration information such as the
     * username, password, certificates, and keys are not stored in the instance
     * metadata. The configuration information is used only to set up the
     * replication connection and is stored by MySQL in a file named
     * <b>master.info</b> in the data directory.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.MySqlReplicaConfiguration mysql_replica_configuration = 2;</code>
     * @param \Google\Cloud\Sql\V1beta4\MySqlReplicaConfiguration $var
     * @return $this
     */
    public function setMysqlReplicaConfiguration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1beta4\MySqlReplicaConfiguration::class);
        $this->mysql_replica_configuration = $var;

        return $this;
    }

    /**
     * Specifies if the replica is the failover target. If the field is set to
     * <b>true</b> the replica will be designated as a failover replica. In
     * case the primary instance fails, the replica instance will be promoted as
     * the new primary instance.  <p>Only one replica can be specified as failover
     * target, and the replica has to be in different zone with the primary
     * instance.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue failover_target = 3;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getFailoverTarget()
    {
        return isset($this->failover_target) ? $this->failover_target : null;
    }

    public function hasFailoverTarget()
    {
        return isset($this->failover_target);
    }

    public function clearFailoverTarget()
    {
        unset($this->failover_target);
    }

    /**
     * Returns the unboxed value from <code>getFailoverTarget()</code>

     * Specifies if the replica is the failover target. If the field is set to
     * <b>true</b> the replica will be designated as a failover replica. In
     * case the primary instance fails, the replica instance will be promoted as
     * the new primary instance.  <p>Only one replica can be specified as failover
     * target, and the replica has to be in different zone with the primary
     * instance.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue failover_target = 3;</code>
     * @return bool|null
     */
    public function getFailoverTargetValue()
    {
        return $this->readWrapperValue("failover_target");
    }

    /**
     * Specifies if the replica is the failover target. If the field is set to
     * <b>true</b> the replica will be designated as a failover replica. In
     * case the primary instance fails, the replica instance will be promoted as
     * the new primary instance.  <p>Only one replica can be specified as failover
     * target, and the replica has to be in different zone with the primary
     * instance.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue failover_target = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setFailoverTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->failover_target = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Specifies if the replica is the failover target. If the field is set to
     * <b>true</b> the replica will be designated as a failover replica. In
     * case the primary instance fails, the replica instance will be promoted as
     * the new primary instance.  <p>Only one replica can be specified as failover
     * target, and the replica has to be in different zone with the primary
     * instance.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue failover_target = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setFailoverTargetValue($var)
    {
        $this->writeWrapperValue("failover_target", $var);
        return $this;}

}
