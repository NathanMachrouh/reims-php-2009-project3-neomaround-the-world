<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216143623 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cost (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, food VARCHAR(50) NOT NULL, transport VARCHAR(50) NOT NULL, accomodation VARCHAR(50) NOT NULL, extra VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_182694FCF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE live (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, culture VARCHAR(500) NOT NULL, life LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_530F2CAFF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opinion (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, interview VARCHAR(255) NOT NULL, advice LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_AB02B027F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cost ADD CONSTRAINT FK_182694FCF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE live ADD CONSTRAINT FK_530F2CAFF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE opinion ADD CONSTRAINT FK_AB02B027F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cost');
        $this->addSql('DROP TABLE live');
        $this->addSql('DROP TABLE opinion');
    }
}
