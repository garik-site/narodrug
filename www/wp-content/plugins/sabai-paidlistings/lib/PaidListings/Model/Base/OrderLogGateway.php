<?php
/* This file has been auto-generated. Do not edit this file directly. */

abstract class Sabai_Addon_PaidListings_Model_Base_OrderLogGateway extends SabaiFramework_Model_Gateway
{
    public function getName()
    {
        return 'paidlistings_orderlog';
    }

    public function getFields()
    {
        return array('orderlog_message' => SabaiFramework_Model::KEY_TYPE_VARCHAR, 'orderlog_status' => SabaiFramework_Model::KEY_TYPE_INT, 'orderlog_is_error' => SabaiFramework_Model::KEY_TYPE_BOOL, 'orderlog_id' => SabaiFramework_Model::KEY_TYPE_INT, 'orderlog_created' => SabaiFramework_Model::KEY_TYPE_INT, 'orderlog_updated' => SabaiFramework_Model::KEY_TYPE_INT, 'orderlog_order_id' => SabaiFramework_Model::KEY_TYPE_INT, 'orderlog_orderitem_id' => SabaiFramework_Model::KEY_TYPE_INT);
    }

    protected function _getIdFieldName()
    {
        return 'orderlog_id';
    }

    protected function _getSelectByIdQuery($id, $fields)
    {
        return sprintf(
            'SELECT %s FROM %spaidlistings_orderlog WHERE orderlog_id = %d',
            empty($fields) ? '*' : implode(', ', $fields),
            $this->_db->getResourcePrefix(),
            $id
        );
    }

    protected function _getSelectByIdsQuery($ids, $fields)
    {
        return sprintf(
            'SELECT %s FROM %spaidlistings_orderlog WHERE orderlog_id IN (%s)',
            empty($fields) ? '*' : implode(', ', $fields),
            $this->_db->getResourcePrefix(),
            implode(', ', array_map('intval', $ids))
        );
    }

    protected function _getSelectByCriteriaQuery($criteriaStr, $fields)
    {
        return sprintf(
            'SELECT %1$s FROM %2$spaidlistings_orderlog paidlistings_orderlog WHERE %3$s',
            empty($fields) ? '*' : implode(', ', $fields),
            $this->_db->getResourcePrefix(),
            $criteriaStr
        );
    }

    protected function _getInsertQuery(&$values)
    {
        $values['orderlog_created'] = time();
        $values['orderlog_updated'] = 0;
        return sprintf('INSERT INTO %spaidlistings_orderlog(orderlog_message, orderlog_status, orderlog_is_error, orderlog_id, orderlog_created, orderlog_updated, orderlog_order_id, orderlog_orderitem_id) VALUES(%s, %d, %u, %s, %d, %d, %d, %d)', $this->_db->getResourcePrefix(), $this->_db->escapeString($values['orderlog_message']), $values['orderlog_status'], $this->_db->escapeBool($values['orderlog_is_error']), empty($values['orderlog_id']) ? 'NULL' : intval($values['orderlog_id']), $values['orderlog_created'], $values['orderlog_updated'], $values['orderlog_order_id'], $values['orderlog_orderitem_id']);
    }

    protected function _getUpdateQuery($id, $values)
    {
        $last_update = $values['orderlog_updated'];
        $values['orderlog_updated'] = time();
        return sprintf('UPDATE %spaidlistings_orderlog SET orderlog_message = %s, orderlog_status = %d, orderlog_is_error = %u, orderlog_updated = %d, orderlog_order_id = %d, orderlog_orderitem_id = %d WHERE orderlog_id = %d AND orderlog_updated = %d', $this->_db->getResourcePrefix(), $this->_db->escapeString($values['orderlog_message']), $values['orderlog_status'], $this->_db->escapeBool($values['orderlog_is_error']), $values['orderlog_updated'], $values['orderlog_order_id'], $values['orderlog_orderitem_id'], $id, $last_update);
    }

    protected function _getDeleteQuery($id)
    {
        return sprintf('DELETE FROM %1$spaidlistings_orderlog WHERE orderlog_id = %2$d', $this->_db->getResourcePrefix(), $id);
    }

    protected function _getUpdateByCriteriaQuery($criteriaStr, $sets)
    {
        $sets['orderlog_updated'] = 'orderlog_updated=' . time();
        return sprintf('UPDATE %spaidlistings_orderlog paidlistings_orderlog SET %s WHERE %s', $this->_db->getResourcePrefix(), implode(', ', $sets), $criteriaStr);
    }

    protected function _getDeleteByCriteriaQuery($criteriaStr)
    {
        return sprintf('DELETE paidlistings_orderlog FROM %1$spaidlistings_orderlog paidlistings_orderlog WHERE %2$s', $this->_db->getResourcePrefix(), $criteriaStr);
    }

    protected function _getCountByCriteriaQuery($criteriaStr)
    {
        return sprintf('SELECT COUNT(*) FROM %1$spaidlistings_orderlog paidlistings_orderlog WHERE %2$s', $this->_db->getResourcePrefix(), $criteriaStr);
    }

    protected function _afterInsert1($id, array $new)
    {
    }

    protected function _afterDelete1($id, array $old)
    {
    }

    protected function _afterUpdate1($id, array $new, array $old)
    {
    }

    protected function _afterInsert($id, array $new)
    {
        $this->_afterInsert1($id, $new);
    }

    protected function _afterUpdate($id, array $new, array $old)
    {
        $this->_afterUpdate1($id, $new, $old);
    }

    protected function _afterDelete($id, array $old)
    {
        $this->_afterDelete1($id, $old);
    }
}