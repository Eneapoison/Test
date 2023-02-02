SELECT nome,cognome,importo,camera
FROM clienti 
INNER JOIN prenotazioni ON id_cliente = cliente 
INNER JOIN citta ON id_citta = clienti.citta
WHERE tipo_struttura IN ('3 stelle', '4 stelle') 
AND citta.provincia_sigla = 'MI'
ORDER BY arrivo DESC,cognome ASC;