<?php

namespace AppBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180225172951 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) DEFAULT NULL, category_site VARCHAR(255) DEFAULT NULL, data_info LONGTEXT DEFAULT NULL, status_parse LONGTEXT DEFAULT NULL, collector_info LONGTEXT DEFAULT NULL, pageId INT DEFAULT NULL, UNIQUE INDEX UNIQ_1F1B251E9D3B65E3 (pageId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, html_data LONGTEXT NOT NULL, link_page LONGTEXT NOT NULL, service VARCHAR(255) NOT NULL, date_create DATE NOT NULL, date_update DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE queue (id INT AUTO_INCREMENT NOT NULL, service VARCHAR(255) NOT NULL, name_queue VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, data LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251E9D3B65E3 FOREIGN KEY (pageId) REFERENCES page (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E9D3B65E3');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE queue');
    }
}
