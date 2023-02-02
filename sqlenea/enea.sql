SELECT *
FROM prenotazioni
WHERE tipo_struttura = '3 stelle'
AND caparra > 80
ORDER BY costo_giornaliero DESC