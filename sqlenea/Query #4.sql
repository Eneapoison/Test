SELECT SUM(importo) AS totale
 , AVG(importo) AS media
FROM citta
INNER JOIN clienti ON id_citta = clienti.citta
INNER JOIN prenotazioni ON id_cliente = cliente
WHERE provincia_nome IN ('Roma','Bologna')
