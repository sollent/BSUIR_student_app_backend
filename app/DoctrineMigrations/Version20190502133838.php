<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190502133838 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_documents (id INT AUTO_INCREMENT NOT NULL, document_type VARCHAR(255) NOT NULL, document_id_number VARCHAR(255) NOT NULL, series VARCHAR(255) NOT NULL, document_number INT NOT NULL, document_date DATETIME NOT NULL, document_who_got VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_address (id INT AUTO_INCREMENT NOT NULL, `index` VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, area VARCHAR(255) NOT NULL, raion VARCHAR(255) NOT NULL, type_of_point VARCHAR(255) NOT NULL, name_of_point VARCHAR(255) NOT NULL, street_type VARCHAR(255) NOT NULL, street_name VARCHAR(255) NOT NULL, house_number INT NOT NULL, house_part_number INT NOT NULL, apartment_number INT NOT NULL, want_have_home TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_phone (id INT AUTO_INCREMENT NOT NULL, country_code INT NOT NULL, home_phone VARCHAR(255) NOT NULL, mobile_phone VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_special (id INT AUTO_INCREMENT NOT NULL, department_name VARCHAR(255) NOT NULL, special_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_education (id INT AUTO_INCREMENT NOT NULL, place_education VARCHAR(255) NOT NULL, education_document_type VARCHAR(255) NOT NULL, school_number VARCHAR(255) NOT NULL, document_number VARCHAR(255) NOT NULL, date_of_end_education DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_base_info (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, third_name VARCHAR(255) NOT NULL, birth_day DATETIME NOT NULL, is_man TINYINT(1) NOT NULL, is_women TINYINT(1) NOT NULL, protection_info LONGTEXT DEFAULT NULL, average_mark VARCHAR(255) NOT NULL, is_free_position TINYINT(1) NOT NULL, is_not_free_position TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_documents');
        $this->addSql('DROP TABLE user_address');
        $this->addSql('DROP TABLE user_phone');
        $this->addSql('DROP TABLE user_special');
        $this->addSql('DROP TABLE user_education');
        $this->addSql('DROP TABLE user_base_info');
    }
}
