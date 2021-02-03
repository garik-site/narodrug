<?php
/* This file has been auto-generated. Do not edit this file directly. */

abstract class Sabai_Addon_Entity_Model_Base_Bundle extends SabaiFramework_Model_Entity
{
    public function __construct(SabaiFramework_Model $model)
    {
        parent::__construct('Bundle', $model);
        $this->_vars = array('bundle_name' => null, 'bundle_path' => null, 'bundle_type' => null, 'bundle_addon' => null, 'bundle_label' => null, 'bundle_label_singular' => null, 'bundle_info' => null, 'bundle_system' => false, 'bundle_entitytype_name' => null, 'bundle_id' => 0, 'bundle_created' => 0, 'bundle_updated' => 0);
    }

    public function __clone()
    {
        $this->_vars = array('bundle_id' => 0, 'bundle_created' => 0, 'bundle_updated' => 0) + $this->_vars;
    }

    public function __toString()
    {
        return $this->__get('name');
    }

    public function addFieldConfig(Sabai_Addon_Entity_Model_FieldConfig $entity)
    {
        $entity->Bundle = $this;

        return $this;
    }

    public function removeFieldConfig(Sabai_Addon_Entity_Model_FieldConfig $entity)
    {
        $this->removeFieldConfigById($entity->id);

        return $this;
    }

    public function removeFieldConfigById($id)
    {
        $this->_removeEntityById('fieldconfig_id', 'FieldConfig', $id);

        return $this;
    }

    public function createFieldConfig()
    {
        return $this->_createEntity('FieldConfig');
    }

    public function removeFieldConfigs()
    {
        $this->_removeEntities('FieldConfig');

        return $this;
    }

    public function addField(Sabai_Addon_Entity_Model_Field $entity)
    {
        $entity->Bundle = $this;

        return $this;
    }

    public function removeField(Sabai_Addon_Entity_Model_Field $entity)
    {
        $this->removeFieldById($entity->id);

        return $this;
    }

    public function removeFieldById($id)
    {
        $this->_removeEntityById('field_id', 'Field', $id);

        return $this;
    }

    public function createField()
    {
        return $this->_createEntity('Field');
    }

    public function removeFields()
    {
        $this->_removeEntities('Field');

        return $this;
    }

    public function addFieldCache(Sabai_Addon_Entity_Model_FieldCache $entity)
    {
        $entity->Bundle = $this;

        return $this;
    }

    public function removeFieldCache(Sabai_Addon_Entity_Model_FieldCache $entity)
    {
        $this->removeFieldCacheById($entity->id);

        return $this;
    }

    public function removeFieldCacheById($id)
    {
        $this->_removeEntityById('fieldcache_id', 'FieldCache', $id);

        return $this;
    }

    public function createFieldCache()
    {
        return $this->_createEntity('FieldCache');
    }

    public function removeFieldCaches()
    {
        $this->_removeEntities('FieldCache');

        return $this;
    }

    public function addFilter(Sabai_Addon_Entity_Model_Filter $entity)
    {
        $entity->Bundle = $this;

        return $this;
    }

    public function removeFilter(Sabai_Addon_Entity_Model_Filter $entity)
    {
        $this->removeFilterById($entity->id);

        return $this;
    }

    public function removeFilterById($id)
    {
        $this->_removeEntityById('filter_id', 'Filter', $id);

        return $this;
    }

    public function createFilter()
    {
        return $this->_createEntity('Filter');
    }

    public function removeFilters()
    {
        $this->_removeEntities('Filter');

        return $this;
    }

    public function __get($name)
    {
        if ($name === 'name')
            return $this->_vars['bundle_name'];
        elseif ($name === 'path')
            return $this->_vars['bundle_path'];
        elseif ($name === 'type')
            return $this->_vars['bundle_type'];
        elseif ($name === 'addon')
            return $this->_vars['bundle_addon'];
        elseif ($name === 'label')
            return $this->_vars['bundle_label'];
        elseif ($name === 'label_singular')
            return $this->_vars['bundle_label_singular'];
        elseif ($name === 'info')
            return $this->_vars['bundle_info'];
        elseif ($name === 'system')
            return $this->_vars['bundle_system'];
        elseif ($name === 'entitytype_name')
            return $this->_vars['bundle_entitytype_name'];
        elseif ($name === 'id')
            return $this->_vars['bundle_id'];
        elseif ($name === 'created')
            return $this->_vars['bundle_created'];
        elseif ($name === 'updated')
            return $this->_vars['bundle_updated'];
        elseif ($name === 'FieldConfigs')
            return $this->_fetchEntities('FieldConfig', 'FieldConfigs');
        elseif ($name === 'Fields')
            return $this->_fetchEntities('Field', 'Fields');
        elseif ($name === 'FieldCaches')
            return $this->_fetchEntities('FieldCache', 'FieldCaches');
        elseif ($name === 'Filters')
            return $this->_fetchEntities('Filter', 'Filters');
        else
            return $this->fetchObject($name);
    }

    public function __set($name, $value)
    {
        if ($name === 'name')
            $this->_setVar('bundle_name', $value);
        elseif ($name === 'path')
            $this->_setVar('bundle_path', $value);
        elseif ($name === 'type')
            $this->_setVar('bundle_type', $value);
        elseif ($name === 'addon')
            $this->_setVar('bundle_addon', $value);
        elseif ($name === 'label')
            $this->_setVar('bundle_label', $value);
        elseif ($name === 'label_singular')
            $this->_setVar('bundle_label_singular', $value);
        elseif ($name === 'info')
            $this->_setVar('bundle_info', $value);
        elseif ($name === 'system')
            $this->_setVar('bundle_system', $value);
        elseif ($name === 'entitytype_name')
            $this->_setVar('bundle_entitytype_name', $value);
        elseif ($name === 'id')
            $this->_setVar('bundle_id', $value);
        elseif ($name === 'FieldConfigs') {
            $this->removeFieldConfigs();
            foreach (array_keys($value) as $i) $this->addFieldConfig($value[$i]);
        }
        elseif ($name === 'Fields') {
            $this->removeFields();
            foreach (array_keys($value) as $i) $this->addField($value[$i]);
        }
        elseif ($name === 'FieldCaches') {
            $this->removeFieldCaches();
            foreach (array_keys($value) as $i) $this->addFieldCache($value[$i]);
        }
        elseif ($name === 'Filters') {
            $this->removeFilters();
            foreach (array_keys($value) as $i) $this->addFilter($value[$i]);
        }
        else
            $this->assignObject($name, $value);
    }

    protected function _initVar($name, $value)
    {
        if ($name === 'bundle_info')
            $this->_vars['bundle_info'] = @unserialize($value);
        elseif ($name === 'bundle_system')
            $this->_vars['bundle_system'] = (bool)$value;
        elseif ($name === 'bundle_id')
            $this->_vars['bundle_id'] = (int)$value;
        elseif ($name === 'bundle_created')
            $this->_vars['bundle_created'] = (int)$value;
        elseif ($name === 'bundle_updated')
            $this->_vars['bundle_updated'] = (int)$value;
        else
            $this->_vars[$name] = $value;
    }
}

abstract class Sabai_Addon_Entity_Model_Base_BundleRepository extends SabaiFramework_Model_EntityRepository
{
    public function __construct(SabaiFramework_Model $model)
    {
        parent::__construct('Bundle', $model);
    }

    protected function _getCollectionByRowset(SabaiFramework_DB_Rowset $rs)
    {
        return new Sabai_Addon_Entity_Model_Base_BundlesByRowset($rs, $this->_model->create('Bundle'), $this->_model);
    }

    public function createCollection(array $entities = array())
    {
        return new Sabai_Addon_Entity_Model_Base_Bundles($this->_model, $entities);
    }
}

class Sabai_Addon_Entity_Model_Base_BundlesByRowset extends SabaiFramework_Model_EntityCollection_Rowset
{
    public function __construct(SabaiFramework_DB_Rowset $rs, Sabai_Addon_Entity_Model_Bundle $emptyEntity, SabaiFramework_Model $model)
    {
        parent::__construct('Bundles', $rs, $emptyEntity, $model);
    }

    protected function _loadRow(SabaiFramework_Model_Entity $entity, array $row)
    {
        $entity->initVars($row);
    }
}

class Sabai_Addon_Entity_Model_Base_Bundles extends SabaiFramework_Model_EntityCollection_Array
{
    public function __construct(SabaiFramework_Model $model, array $entities = array())
    {
        parent::__construct($model, 'Bundles', $entities);
    }
}