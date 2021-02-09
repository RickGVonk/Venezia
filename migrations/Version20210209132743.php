<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210209132743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bestelling (id INT AUTO_INCREMENT NOT NULL, klant VARCHAR(255) NOT NULL, telefoon INT NOT NULL, afhaaldatum DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bestellingregel (id INT AUTO_INCREMENT NOT NULL, aantal INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fruit (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, seizoen VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recept (id INT AUTO_INCREMENT NOT NULL, naam VARCHAR(255) NOT NULL, prijs_per_liter DOUBLE PRECISION NOT NULL, bereidingswijze VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE bestelling');
        $this->addSql('DROP TABLE bestellingregel');
        $this->addSql('DROP TABLE fruit');
        $this->addSql('DROP TABLE recept');
    }
}
