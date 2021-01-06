<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210106152803 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE country SET latitude="-34.9964963", longitude="-64.9672817" WHERE id=10');
        $this->addSql('UPDATE country SET latitude="-24.7761086", longitude="134.755" WHERE id=11');
        $this->addSql('UPDATE country SET latitude="47.2000338", longitude="13.199959" WHERE id=12');
        $this->addSql('UPDATE country SET latitude="50.6402809", longitude="4.6667145" WHERE id=13');
        $this->addSql('UPDATE country SET latitude="-10.3333333", longitude="-53.2" WHERE id=14');
        $this->addSql('UPDATE country SET latitude="61.0666922", longitude="-107.9917071" WHERE id=15');
        $this->addSql('UPDATE country SET latitude="-31.7613365", longitude="-71.3187697" WHERE id=16');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
