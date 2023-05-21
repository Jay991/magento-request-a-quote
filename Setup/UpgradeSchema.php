<?php
namespace Magento\RequestAQuote\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.0.1') < 0) {
            // Perform database schema changes for version 2.0.1 or higher
            $connection = $setup->getConnection();
            $quoteTable = $setup->getTable('quote');

            // Add a new column to the quote table
            $connection->addColumn(
                $quoteTable,
                'additional_field',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Additional Field'
                ]
            );

            // Perform other schema changes or data migrations if needed
        }

        $setup->endSetup();
    }
}
