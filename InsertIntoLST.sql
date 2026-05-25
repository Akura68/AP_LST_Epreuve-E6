INSERT INTO Copropriete (nomImmeuble, rue, cp, ville) VALUES
('Résidence des Pins', '18, av de la Pins', '44000', 'Nantes'),
('Résidence des Balsamiers', '5, Pl de la résidence', '44000', 'Nantes');

INSERT INTO Coproprietaire (civilite, nom, prenom, rue, cp, ville, tel, login, passwd) VALUES 
(true, 'MULLER', 'Jean-Marie', '18, av des Pins', '44000', 'Nantes', '0952561926', 'MJean', '$2y$10$OC8AYhw2JLDLetn3ZNFuvO8evFc90eWsvUMSVl.rKT.7KyATIipJK'),
(true, 'VIVIAN', 'Christian', '18, av des Pins', '44000', 'Nantes', '0952324920', 'VChristian', '$2y$10$5FGAVsnwQlw1YZ5C5atMhufL.qSGz94tQb1bOkhjupR6EBN0zoVjC'),
(true, 'SAIDJ', 'Simon', '49, rue des chateaux', '49000', 'Angers', '0952375642', 'SSimon', '$2y$10$iIw7Pp/XRC7Xs3GGW6tzyetYxftR1geMHpMxXVJG40iu8vgfjSGGa'),
(false, 'BEIRUT', 'Virginie', '18, av des Pins', '44000', 'Nantes', '0952528960', 'BVirginie', '$2y$10$cHGjZvCuKH4ja2Nh1DysT.zRaO8bHh1OqItzgoTft.B0AleiWeIHu'),
(true, 'HAFID', 'Karim', '18, av des Pins', '44000', 'Nantes', '0952554645', 'HKarim', '$2y$10$FDEmjC96pw4nEXrzbu9f.uFkSz9kL5j5ROuzyjMXuNq.FmhmbvXXq');

INSERT INTO Travaux (idTravaux, libelleTravaux) VALUES
('10', 'Rénovation parking'),
('20', 'Réflection toiture'),
('30', 'Ravalement façade');

INSERT INTO Prestataire(nomPrestataire) VALUES
('Perthuis'),
('SMBTP'),
('ARDEN BTP'),
('Heiss SARL'),
('MURANO SA'),
('Renov Façade');

INSERT INTO Lot(idLot, localisation, tantieme, idCopropriete, idCoproprietaire) VALUES
('1101', 'RDC coté AV des', '2097', '1', '1'),
('1102', 'REZ DE JARDIN', '1422', '1', '2'),
('1103', 'ETAGE AV DE LA', '1659', '1', '3'),
('1104', 'ETAGE JARDIN', '2222', '1', '4'),
('1105', 'COMBLE', '1400', '1', '2'),
('1106', 'ETAGE JARDIN', '1200', '2', '5');

INSERT INTO Devis(idDevis, dateDev, MontantTTC, vote, idPrestataire, idTravaux, idCopropriete) VALUES
('1479', '2021-05-30', '14500.00', true, '1', '10', '1'),
('1480', '2021-05-15', '15000.00', false, '2', '10', '1'),
('1481', '2021-05-31', '17000.00', false, '3', '10', '1'),
('1482', '2021-06-15', '246000.00', true, '4', '20', '2'),
('1483', '2021-06-30', '271000.00', false, '5', '20', '2'),
('1484', '2021-06-10', '223000.00', false, '3', '20', '2'),
('1485', '2021-10-12', '25000.00', true, '6', '30', '1'),
('1486', '2021-10-15', '27000.00', false, '2', '30', '1'),
('1487', '2021-10-28', '22000.00', false, '3', '30', '1');