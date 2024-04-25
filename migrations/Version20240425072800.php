<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240425072800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tratamiento (id INT AUTO_INCREMENT NOT NULL, mascota_id INT DEFAULT NULL, nombre VARCHAR(50) NOT NULL, INDEX IDX_61A4A07CFB60C59E (mascota_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tratamiento ADD CONSTRAINT FK_61A4A07CFB60C59E FOREIGN KEY (mascota_id) REFERENCES mascota (id)');
    
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tratamiento DROP FOREIGN KEY FK_61A4A07CFB60C59E');
        $this->addSql('DROP TABLE tratamiento');
    }
}
