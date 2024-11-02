<?php

include(__DIR__ . '/../../../init.inc.php');
$item_class = ItemClass::find_by_uri('tw.geo.county');
if (!$item_class) {
    throw new Exception('Item class not found');
}
$object_ids = ItemObject::search(['class_id' => $item_class->class_id], 'object_id')->toArray('object_id');
if (!$object_ids) {
    throw new Exception('No object found');
}

MiniEngine::getDb()->query("DELETE FROM item_object_meta WHERE object_id IN (" . implode(',', $object_ids) . ")");
MiniEngine::getDb()->query("DELETE FROM item_object_data WHERE object_id IN (" . implode(',', $object_ids) . ")");
MiniEngine::getDb()->query("DELETE FROM item_object_log WHERE object_id IN (" . implode(',', $object_ids) . ")");
MiniEngine::getDb()->query("DELETE FROM item_object_geometry WHERE class_id = {$item_class->class_id}");
MiniEngine::getDb()->query("DELETE FROM item_object WHERE object_id IN (" . implode(',', $object_ids) . ")");
$item_class->delete();
