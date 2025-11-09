### 🧩 **MCD (Modèle Conceptuel de Données)**

**Entités principales :**

* **Utilisateur** (`id_utilisateur`, `nom`, `telephone`, `mot_de_passe`, `solde`)
* **Compte** (`id_compte`, `numero_compte`, `id_utilisateur`)
* **Transaction** (`id_transaction`, `montant`, `date_transaction`, `type_transaction`)
* **Retrait** (`id_retrait`, `montant`, `date_retrait`, `lieu_retrait`, `id_utilisateur`)

**Associations :**

* Un **Utilisateur** possède un ou plusieurs **Comptes**.
* Un **Utilisateur** effectue plusieurs **Transactions** (envoi ou réception).
* Un **Utilisateur** peut effectuer plusieurs **Retraits**.

---

### 💾 **MLD (Modèle Logique de Données)**

```
UTILISATEUR(
  id_utilisateur PK,
  nom,
  telephone UNIQUE,
  mot_de_passe,
  solde
)

COMPTE(
  id_compte PK,
  numero_compte UNIQUE,
  id_utilisateur FK → UTILISATEUR.id_utilisateur
)

TRANSACTION(
  id_transaction PK,
  montant,
  date_transaction,
  type_transaction,
  id_expediteur FK → UTILISATEUR.id_utilisateur,
  id_destinataire FK → UTILISATEUR.id_utilisateur
)

RETRAIT(
  id_retrait PK,
  montant,
  date_retrait,
  lieu_retrait,
  id_utilisateur FK → UTILISATEUR.id_utilisateur
)
```

---

### 🗄️ **MPD (Modèle Physique - SQL PostgreSQL)**

```sql
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

