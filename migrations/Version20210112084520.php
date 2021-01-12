<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112084520 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=9');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=10');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=11');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=12');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=13');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=14');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=15');
        $this->addSql('UPDATE country SET latitude="0", longitude="0" WHERE id=16');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
