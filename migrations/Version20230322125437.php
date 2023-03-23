<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230322125437 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // To avoid "An exception occurred while executing a query: SQLSTATE[23502]: Not null violation"
        $now = date('Y-m-d', time());   
        $this->addSql('ALTER TABLE asset ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NULL');
        $this->addSql('ALTER TABLE asset ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE NULL');
        
        $this->addSql("UPDATE asset SET created_at='$now'");
        $this->addSql("UPDATE asset SET updated_at='$now'");
        $this->addSql("UPDATE asset SET purchase_date='$now'");
        $this->addSql("UPDATE asset SET purchase_price=1");

        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset ALTER created_at SET NOT NULL');
        $this->addSql('ALTER TABLE asset ALTER updated_at SET NOT NULL');
        $this->addSql('ALTER TABLE asset ALTER purchase_date SET NOT NULL');
        $this->addSql('ALTER TABLE asset ALTER purchase_price SET NOT NULL');
        $this->addSql('COMMENT ON COLUMN asset.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN asset.updated_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE asset DROP created_at');
        $this->addSql('ALTER TABLE asset DROP updated_at');
        $this->addSql('ALTER TABLE asset ALTER purchase_date DROP NOT NULL');
        $this->addSql('ALTER TABLE asset ALTER purchase_price DROP NOT NULL');
    }
}
