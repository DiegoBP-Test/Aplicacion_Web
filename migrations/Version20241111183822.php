<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241111183822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP nombre_producto, DROP precio, DROP no_unidades');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos ADD nombre_producto VARCHAR(255) NOT NULL, ADD precio DOUBLE PRECISION DEFAULT \'0\' NOT NULL, ADD no_unidades INT DEFAULT 0 NOT NULL');
    }
}
