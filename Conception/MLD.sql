CREATE TABLE utilisateur (
  id_utilisateur SERIAL PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  telephone VARCHAR(20) UNIQUE NOT NULL,
  mot_de_passe TEXT NOT NULL,
  solde DECIMAL(12,2) DEFAULT 0
);

CREATE TABLE compte (
  id_compte SERIAL PRIMARY KEY,
  numero_compte VARCHAR(50) UNIQUE NOT NULL,
  id_utilisateur INT NOT NULL REFERENCES utilisateur(id_utilisateur)
);

CREATE TABLE transaction (
  id_transaction SERIAL PRIMARY KEY,
  montant DECIMAL(12,2) NOT NULL,
  date_transaction TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  type_transaction VARCHAR(20) CHECK (type_transaction IN ('envoi', 'reception')),
  id_expediteur INT REFERENCES utilisateur(id_utilisateur),
  id_destinataire INT REFERENCES utilisateur(id_utilisateur)
);

CREATE TABLE retrait (
  id_retrait SERIAL PRIMARY KEY,
  montant DECIMAL(12,2) NOT NULL,
  date_retrait TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  lieu_retrait VARCHAR(100),
  id_utilisateur INT NOT NULL REFERENCES utilisateur(id_utilisateur)
);
