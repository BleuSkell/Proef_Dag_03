USE proef_dag_03;

INSERT INTO type_people (Name, IsActief, Opmerking, DatumAangemaakt, DatumGewijzigd)
VALUES ('Medewerker', 1, 'Medewerkers van de bowling center', NOW(), NOW())
        ,('Gast', 1, 'Gasten die de website bezoeken', NOW(), NOW());

INSERT INTO people (TypePerson_Id, FirstName, Infix, LastName, CallName, IsAdult, IsActief, Opmerking, DatumAangemaakt, DatumGewijzigd)
VALUES  (1, 'Arjan', 'de', 'Ruijter', 'Arjan', 1, 1, 'Klant van de bowling center', NOW(), NOW())
        ,(1, 'Hans', null, 'Odijk', 'Hans', 1, 1, 'Klant van de bowling center', NOW(), NOW())
        ,(1, 'Dennis', 'van', 'Wakeren', 'Dennis', 1, 1, 'Klant van de bowling center', NOW(), NOW())
        ,(2, 'Wilco', 'Van de', 'Grift', 'Wilco', 1, 1, 'Medewerker van de bowling center', NOW(), NOW())
        ,(3, 'Tom', null, 'Sanders', 'Tom', 0, 0, 'Gast van de bowling center', NOW(), NOW())
        ,(3, 'Andrew', null, 'Sanders', 'Andrew', 0, 0, 'Gast van de bowling center', NOW(), NOW())
        ,(3, 'Julian', null, 'Kaldenheuvel', 'Julian', 1, 1, 'Gast van de bowling center', NOW(), NOW());

INSERT INTO contacts (Person_id, Mobile, E_mail, IsActief, Opmerking, DatumAangemaakt, DatumGewijzigd)
VALUES  (2, '0637264532', 'a.ruijter@gmail.com', 1, 'Contact gegevens van Arjan', NOW(), NOW())
        ,(3, '0639451238', 'h.odijk@gmail.com', 1, 'Contact gegevens van Hans', NOW(), NOW())
        ,(4, '0693234612', 'd.van.wakeren@gmail.com', 1, 'Contact gegevens van Dennis', NOW(), NOW())
        ,(5, '0693234694', 'w.van.de.grift@gmail.com', 1, 'Contact gegevens van Wilco', NOW(), NOW());

INSERT INTO users (Person_id, name, email, Password, IsLoggedIn, LoggedInAt, LoggedOut, IsActief, Comment, CreatedAt, UpdatedAt)
VALUES (5, 'wilco', 'w.van.de.grift@gmail.com', '$2y$10$MmF2xYH.woUKV1rGWVKCiuSqRdSQ/qAMO8QCX.mIfAZWv9N68EuK.', 0, '2209-10-18 17:10:12', '2209-10-18 17:20:42', 1, NULL, NOW(), NOW());

INSERT INTO opening_times (DayName, StartTime, EndTime, Is_Active, Comment, CreatedAt, UpdatedAt)
VALUES  ('Maandag', '14:00', '22:00', 1, NULL, NOW(), NOW())
        ,('Dinsdag', '14:00', '22:00', 1, NULL, NOW(), NOW())
        ,('Woensdag', '14:00', '22:00', 1, NULL, NOW(), NOW())
        ,('Donderdag', '14:00', '22:00', 1, NULL, NOW(), NOW())
        ,('Vrijdagmiddag', '14:00', '18:00', 1, NULL, NOW(), NOW())
        ,('Vrijdagavond', '18:00', '24:00', 1, NULL, NOW(), NOW())
        ,('Zaterdagmiddag', '14:00', '18:00', 1, NULL, NOW(), NOW())
        ,('Zaterdagavond', '18:00', '24:00', 1, NULL, NOW(), NOW())
        ,('Zondagmiddag', '14:00', '18:00', 1, NULL, NOW(), NOW())
        ,('Zondagavond', '18:00', '24:00', 1, NULL, NOW(), NOW());

INSERT INTO lanes (Number, HasFence, Is_Active, Comment, CreatedAt, UpdatedAt)
VALUES  (1, 0, 1, NULL, NOW(), NOW())
        ,(2, 0, 1, NULL, NOW(), NOW())
        ,(3, 0, 1, NULL, NOW(), NOW())
        ,(4, 0, 1, NULL, NOW(), NOW())
        ,(5, 0, 1, NULL, NOW(), NOW())
        ,(6, 0, 1, NULL, NOW(), NOW())
        ,(7, 1, 1, NULL, NOW(), NOW())
        ,(8, 1, 1, NULL, NOW(), NOW());

INSERT INTO package_options (Name, Is_Active, Comment, CreatedAt, UpdatedAt)
VALUES  ('Snackpakketbasis', 1, NULL, NOW(), NOW())
        ,('Snackpakketluxe', 1, NULL, NOW(), NOW())
        ,('Kinderpartij', 1, NULL, NOW(), NOW())
        ,('Vrijgezellenfeest', 1, NULL, NOW(), NOW());

INSERT INTO reservations (Person_id, OpeningTime_id, Lane_id, PackageOption_id, ReservationStatus, ReservationNumber, Date, TotalHours, StartTime, EndTime, AdultsAmount, ChildrenAmount, Is_Active, Comment, CreatedAt, UpdatedAt)
VALUES  (1, 2, 8, 1, 'Bevestigd', '2022122000001', '2022-12-20', 1, '15:00', '16:00', 4, 2, 1, NULL, NOW(), NOW())
        ,(2, 2, 2, 3, 'Bevestigd', '2022122000002', '2022-12-20', 1, '17:00', '18:00', 4, NULL, 1, NULL, NOW(), NOW())
        ,(3, 7, 3, 1, 'Bevestigd', '2022122400003', '2022-12-24', 2, '16:00', '18:00', 4, NULL, 1, NULL, NOW(), NOW())
        ,(1, 2, 6, NULL, 'Bevestigd', '2022122700004', '2022-12-27', 2, '17:00', '19:00', 2, NULL, 1, NULL, NOW(), NOW())
        ,(4, 3, 4, 4, 'Bevestigd', '2022122800005', '2022-12-28', 1, '14:00', '15:00', 3, NULL, 1, NULL, NOW(), NOW())
        ,(5, 10, 5, 4, 'Bevestigd', '2022122800006', '2022-12-28', 2, '19:00', '21:00', 2, NULL, 1, NULL, NOW(), NOW());

INSERT INTO spellen (persoon_id, reservering_id)
VALUES (1, 1)
        ,(2, 2)
        ,(3, 3)
        ,(4, 5)
        ,(6, 5)
        ,(7, 5)
        ,(8, 5) ;

INSERT INTO uitslagen (spel_id, aantalpunten)
VALUES (1, 290)
        ,(2, 300)
        ,(3, 120)
        ,(4, 34)
        ,(5, NULL)
        ,(6, 234)
        ,(7, 299);