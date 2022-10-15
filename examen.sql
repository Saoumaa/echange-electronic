

--
-- Base de données :  `bdexamen`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `idCand` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `datnais` date DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `sexe` char(1) NOT NULL,
  `codefil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `codefil` varchar(10) NOT NULL,
  `nomfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `filiere`
--

INSERT INTO `filiere` (`codefil`, `nomfil`) VALUES
('sdf', 'sqdfsdsd'),
('SIL', 'Systèmes Informatiques et Logiciels');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`idCand`),
  ADD KEY `fk_candidat_filiere_codefil` (`codefil`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`codefil`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `idCand` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD CONSTRAINT `fk_candidat_filiere_codefil` FOREIGN KEY (`codefil`) REFERENCES `filiere` (`codefil`);

