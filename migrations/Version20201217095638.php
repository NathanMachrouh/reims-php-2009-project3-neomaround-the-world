<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217095638 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO live(culture, life, country_id) VALUES 
        ("Germany ( Deutschland), in its long form Federal Republic of Germany is one of the leading countries in Western Europe, as well as a member of the European Union and the Eurozone. Its capital is Berlin and its official language is German. Germany has more than 83 million inhabitants in 2019. Germany is a federal republic. The country is divided into Länder1 , highly autonomous regional states. There are 16 of them, five of which are in the former East Germany.", "You can encounter some special administrative task arriving in the country like accomodation, office or city hall registration. No special insurance is required before entering the country. Finally, as an accomodation you can stay at private or university student residences, it is also possible to find a private shared housing.", 1)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
