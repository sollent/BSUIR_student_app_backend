<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190502134440 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE table_user ADD user_base_info_id INT DEFAULT NULL, ADD user_documents_id INT DEFAULT NULL, ADD user_education_id INT DEFAULT NULL, ADD user_address_id INT DEFAULT NULL, ADD user_phone_id INT DEFAULT NULL, ADD user_special_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE table_user ADD CONSTRAINT FK_C7459682E941049E FOREIGN KEY (user_base_info_id) REFERENCES user_base_info (id)');
        $this->addSql('ALTER TABLE table_user ADD CONSTRAINT FK_C7459682DFC35B50 FOREIGN KEY (user_documents_id) REFERENCES user_documents (id)');
        $this->addSql('ALTER TABLE table_user ADD CONSTRAINT FK_C7459682AC6DC173 FOREIGN KEY (user_education_id) REFERENCES user_education (id)');
        $this->addSql('ALTER TABLE table_user ADD CONSTRAINT FK_C745968252D06999 FOREIGN KEY (user_address_id) REFERENCES user_address (id)');
        $this->addSql('ALTER TABLE table_user ADD CONSTRAINT FK_C7459682DBFEC7CB FOREIGN KEY (user_phone_id) REFERENCES user_phone (id)');
        $this->addSql('ALTER TABLE table_user ADD CONSTRAINT FK_C7459682E83CFF85 FOREIGN KEY (user_special_id) REFERENCES user_special (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7459682E941049E ON table_user (user_base_info_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7459682DFC35B50 ON table_user (user_documents_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7459682AC6DC173 ON table_user (user_education_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C745968252D06999 ON table_user (user_address_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7459682DBFEC7CB ON table_user (user_phone_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7459682E83CFF85 ON table_user (user_special_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE table_user DROP FOREIGN KEY FK_C7459682E941049E');
        $this->addSql('ALTER TABLE table_user DROP FOREIGN KEY FK_C7459682DFC35B50');
        $this->addSql('ALTER TABLE table_user DROP FOREIGN KEY FK_C7459682AC6DC173');
        $this->addSql('ALTER TABLE table_user DROP FOREIGN KEY FK_C745968252D06999');
        $this->addSql('ALTER TABLE table_user DROP FOREIGN KEY FK_C7459682DBFEC7CB');
        $this->addSql('ALTER TABLE table_user DROP FOREIGN KEY FK_C7459682E83CFF85');
        $this->addSql('DROP INDEX UNIQ_C7459682E941049E ON table_user');
        $this->addSql('DROP INDEX UNIQ_C7459682DFC35B50 ON table_user');
        $this->addSql('DROP INDEX UNIQ_C7459682AC6DC173 ON table_user');
        $this->addSql('DROP INDEX UNIQ_C745968252D06999 ON table_user');
        $this->addSql('DROP INDEX UNIQ_C7459682DBFEC7CB ON table_user');
        $this->addSql('DROP INDEX UNIQ_C7459682E83CFF85 ON table_user');
        $this->addSql('ALTER TABLE table_user DROP user_base_info_id, DROP user_documents_id, DROP user_education_id, DROP user_address_id, DROP user_phone_id, DROP user_special_id');
    }
}
