<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/schemaregistry/v1/schema_registry.proto

namespace Google\Cloud\ManagedKafka\SchemaRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for updating schema config.
 * On a SchemaSubject-level SchemaConfig, an unset field will be removed from
 * the SchemaConfig.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.schemaregistry.v1.UpdateSchemaConfigRequest</code>
 */
class UpdateSchemaConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name to update the config for. It can be either of
     * following:
     *   * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config: Update config at global level.
     *   * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config/{subject}: Update config for a specific subject.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The compatibility type of the schemas.
     * Cannot be unset for a SchemaRegistry-level SchemaConfig.
     * If unset on a SchemaSubject-level SchemaConfig, removes the compatibility
     * field for the SchemaConfig.
     *
     * Generated from protobuf field <code>optional .google.cloud.managedkafka.schemaregistry.v1.SchemaConfig.CompatibilityType compatibility = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $compatibility = null;
    /**
     * Optional. If true, the schema will be normalized before being stored or
     * looked up. The default is false. Cannot be unset for a SchemaRegistry-level
     * SchemaConfig. If unset on a SchemaSubject-level SchemaConfig, removes the
     * normalize field for the SchemaConfig.
     *
     * Generated from protobuf field <code>optional bool normalize = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $normalize = null;

    /**
     * @param string $name          Required. The resource name to update the config for. It can be either of
     *                              following:
     *                              * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config: Update config at global level.
     *                              * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config/{subject}: Update config for a specific subject. Please see
     *                              {@see ManagedSchemaRegistryClient::schemaConfigName()} for help formatting this field.
     * @param int    $compatibility Required. The compatibility type of the schemas.
     *                              Cannot be unset for a SchemaRegistry-level SchemaConfig.
     *                              If unset on a SchemaSubject-level SchemaConfig, removes the compatibility
     *                              field for the SchemaConfig.
     *                              For allowed values, use constants defined on {@see \Google\Cloud\ManagedKafka\SchemaRegistry\V1\SchemaConfig\CompatibilityType}
     *
     * @return \Google\Cloud\ManagedKafka\SchemaRegistry\V1\UpdateSchemaConfigRequest
     *
     * @experimental
     */
    public static function build(string $name, int $compatibility): self
    {
        return (new self())
            ->setName($name)
            ->setCompatibility($compatibility);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name to update the config for. It can be either of
     *           following:
     *             * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config: Update config at global level.
     *             * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config/{subject}: Update config for a specific subject.
     *     @type int $compatibility
     *           Required. The compatibility type of the schemas.
     *           Cannot be unset for a SchemaRegistry-level SchemaConfig.
     *           If unset on a SchemaSubject-level SchemaConfig, removes the compatibility
     *           field for the SchemaConfig.
     *     @type bool $normalize
     *           Optional. If true, the schema will be normalized before being stored or
     *           looked up. The default is false. Cannot be unset for a SchemaRegistry-level
     *           SchemaConfig. If unset on a SchemaSubject-level SchemaConfig, removes the
     *           normalize field for the SchemaConfig.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\Schemaregistry\V1\SchemaRegistry::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name to update the config for. It can be either of
     * following:
     *   * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config: Update config at global level.
     *   * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config/{subject}: Update config for a specific subject.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name to update the config for. It can be either of
     * following:
     *   * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config: Update config at global level.
     *   * projects/{project}/locations/{location}/schemaRegistries/{schema_registry}/config/{subject}: Update config for a specific subject.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The compatibility type of the schemas.
     * Cannot be unset for a SchemaRegistry-level SchemaConfig.
     * If unset on a SchemaSubject-level SchemaConfig, removes the compatibility
     * field for the SchemaConfig.
     *
     * Generated from protobuf field <code>optional .google.cloud.managedkafka.schemaregistry.v1.SchemaConfig.CompatibilityType compatibility = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCompatibility()
    {
        return isset($this->compatibility) ? $this->compatibility : 0;
    }

    public function hasCompatibility()
    {
        return isset($this->compatibility);
    }

    public function clearCompatibility()
    {
        unset($this->compatibility);
    }

    /**
     * Required. The compatibility type of the schemas.
     * Cannot be unset for a SchemaRegistry-level SchemaConfig.
     * If unset on a SchemaSubject-level SchemaConfig, removes the compatibility
     * field for the SchemaConfig.
     *
     * Generated from protobuf field <code>optional .google.cloud.managedkafka.schemaregistry.v1.SchemaConfig.CompatibilityType compatibility = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCompatibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ManagedKafka\SchemaRegistry\V1\SchemaConfig\CompatibilityType::class);
        $this->compatibility = $var;

        return $this;
    }

    /**
     * Optional. If true, the schema will be normalized before being stored or
     * looked up. The default is false. Cannot be unset for a SchemaRegistry-level
     * SchemaConfig. If unset on a SchemaSubject-level SchemaConfig, removes the
     * normalize field for the SchemaConfig.
     *
     * Generated from protobuf field <code>optional bool normalize = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getNormalize()
    {
        return isset($this->normalize) ? $this->normalize : false;
    }

    public function hasNormalize()
    {
        return isset($this->normalize);
    }

    public function clearNormalize()
    {
        unset($this->normalize);
    }

    /**
     * Optional. If true, the schema will be normalized before being stored or
     * looked up. The default is false. Cannot be unset for a SchemaRegistry-level
     * SchemaConfig. If unset on a SchemaSubject-level SchemaConfig, removes the
     * normalize field for the SchemaConfig.
     *
     * Generated from protobuf field <code>optional bool normalize = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setNormalize($var)
    {
        GPBUtil::checkBool($var);
        $this->normalize = $var;

        return $this;
    }

}

