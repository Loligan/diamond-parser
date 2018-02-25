<?php

namespace AppBundle\Migrations;

use AppBundle\Entity\SettingsValues;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180225175051 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $fields = [
        SettingsValues::SETTING_API_KEY=>'1234567893feefc5f0q5000bfo0c38d90bbeb',
        SettingsValues::SETTING_API_EMAIL=>'example@example.com'
    ];

        foreach ($fields as $fieldName => $fieldData) {
            $this->addSql('insert into settings_values (name_setting, value_setting) values  (?, ?)', [
                $fieldName,
                $fieldData
            ]);

        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        throw new \Exception('Not implemented');
    }
}
