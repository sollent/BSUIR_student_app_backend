<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190502164607 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE special_info (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_special ADD special_id INT DEFAULT NULL, DROP special_name');
        $this->addSql('ALTER TABLE user_special ADD CONSTRAINT FK_146621E94F5B3969 FOREIGN KEY (special_id) REFERENCES special_info (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_146621E94F5B3969 ON user_special (special_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_special DROP FOREIGN KEY FK_146621E94F5B3969');
        $this->addSql('DROP TABLE special_info');
        $this->addSql('DROP INDEX UNIQ_146621E94F5B3969 ON user_special');
        $this->addSql('ALTER TABLE user_special ADD special_name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, DROP special_id');
    }
}
