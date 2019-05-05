<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190503101010 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_base_info CHANGE birth_day birth_day DATETIME DEFAULT NULL, CHANGE is_man is_man TINYINT(1) DEFAULT NULL, CHANGE is_women is_women TINYINT(1) DEFAULT NULL, CHANGE is_free_position is_free_position TINYINT(1) DEFAULT NULL, CHANGE is_not_free_position is_not_free_position TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_base_info CHANGE birth_day birth_day DATETIME NOT NULL, CHANGE is_man is_man TINYINT(1) NOT NULL, CHANGE is_women is_women TINYINT(1) NOT NULL, CHANGE is_free_position is_free_position TINYINT(1) NOT NULL, CHANGE is_not_free_position is_not_free_position TINYINT(1) NOT NULL');
    }
}
