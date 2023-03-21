<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230321153440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset RENAME COLUMN nome TO name');
        $this->addSql('ALTER TABLE asset RENAME COLUMN data_aquisicao TO purchase_date');
        $this->addSql('ALTER TABLE asset RENAME COLUMN valor_aquisicao TO purchase_price');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE asset RENAME COLUMN name TO nome');
        $this->addSql('ALTER TABLE asset RENAME COLUMN purchase_date TO data_aquisicao');
        $this->addSql('ALTER TABLE asset RENAME COLUMN purchase_price TO valor_aquisicao');
    }
}
