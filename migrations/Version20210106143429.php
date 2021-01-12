<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210106143429 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('UPDATE country SET latitude="51.0834196", longitude="10.4234469" WHERE id=1');
       
        /*("-34.9964963","-64.9672817",10),
        ("-24.7761086","134.755",11),
        ("47.2000338","13.199959",12),
        ("50.6402809","4.6667145",13),
        ("-10.3333333","-53.2",14),
        ("61.0666922","-107.9917071",15),
        ("-31.7613365","-71.3187697",16),
        ("35.000074","104.999927",17),
        ("2.8894434","-73.783892",18),
        ("49.8167003","15.4749544",19),
        ("55.6867243","12.5700724",20),
        ("-1.3397668","-79.3666965",21)
        ');*/
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
