<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112142810 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cost (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, food VARCHAR(50) NOT NULL, transport VARCHAR(50) NOT NULL, accomodation VARCHAR(50) NOT NULL, extra VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_182694FCF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(90) NOT NULL, latitude DOUBLE PRECISION NOT NULL, longitude DOUBLE PRECISION NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE live (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, culture VARCHAR(500) NOT NULL, life LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_530F2CAFF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opinion (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, interview VARCHAR(255) NOT NULL, advice LONGTEXT NOT NULL, INDEX IDX_AB02B027A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE university (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, name VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, street VARCHAR(100) NOT NULL, city VARCHAR(30) NOT NULL, postal_code VARCHAR(50) NOT NULL, referent_mail VARCHAR(50) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_A07A85ECF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cost ADD CONSTRAINT FK_182694FCF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE live ADD CONSTRAINT FK_530F2CAFF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B027A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE university ADD CONSTRAINT FK_A07A85ECF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cost DROP FOREIGN KEY FK_182694FCF92F3E70');
        $this->addSql('ALTER TABLE live DROP FOREIGN KEY FK_530F2CAFF92F3E70');
        $this->addSql('ALTER TABLE university DROP FOREIGN KEY FK_A07A85ECF92F3E70');
        $this->addSql('ALTER TABLE opinion DROP FOREIGN KEY FK_AB02B027A76ED395');
        $this->addSql('DROP TABLE cost');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE live');
        $this->addSql('DROP TABLE opinion');
        $this->addSql('DROP TABLE university');
        $this->addSql('DROP TABLE user');
    }
}
