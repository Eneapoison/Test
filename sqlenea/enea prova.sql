SELECT nome,cognome,importo,camera
FROM clienti 
INNER JOIN prenotazioni ON id_cliente = cliente 
WHERE nome LIKE 'A%'