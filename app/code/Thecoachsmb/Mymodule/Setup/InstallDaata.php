<?php
 
namespace Thecoachsmb\Mymodule\Setup;
 
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
class InstallData implements InstallDataInterface
{
 
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        $tableName = $setup->getTable('thecoachsmb_students');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'name' => 'Raj',
                    'course' => 'BBA',
                    'joined_at' => date('Y-m-d H:i:s'),
                    'gender' => male,
                ],
                [
                    'name' => 'Sirisha',
                    'course' => 'MBBS',
                    'joined_at' => date('Y-m-d H:i:s'),
                    'gender' => female,
                ],
                [
                    'name' => 'Ram',
                    'course' => 'BA',
                    'joined_at' => date('Y-m-d H:i:s'),
                    'gender' => ,
                ],
            ];
            foreach ($data as $item) {
                //Insert data
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}
