<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230321153032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE patrimonio_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE asset_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE asset (id INT NOT NULL, nome VARCHAR(255) NOT NULL, data_aquisicao TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, valor_aquisicao DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE patrimonio');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE asset_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE patrimonio_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE patrimonio (id INT NOT NULL, nome VARCHAR(255) NOT NULL, data_aquisicao TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, valor_aquisicao DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE asset');
    }
}
