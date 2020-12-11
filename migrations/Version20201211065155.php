<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201211065155 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO country (name) VALUES ("Argentina"),("Australia"),("Austria"),("Belgium"),("Brazil"),
        ("Canada"),("Chile"),("China"),("Colombia"),("Czech Rep"),("Denmark"),("Ecuador"),("Estonia"),("Finland"),
        ("Hungary"),("India"),("Ireland"),("Israël"),("Italy"),("Japan"),("Lebanon"),("Lithuania"),("Malaysia"),
        ("Mexico"),("Morocco"),("Netherlands"),("Norway"),("Peru"),("Poland"),("Portugal"),("Russia"),("Singapore"),
        ("Slovenia"),("South Africa"),("South Korea"),("Spain"),("Sweden"),("Switzerland"),("Turkey"),
        ("United Kingdom"),("United Arab Emirates"),("Uruguay"),("USA"),("Vietnam")');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
