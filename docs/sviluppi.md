


SELECT v.* , u.login_utenti 
FROM `volontari` v join utenti u on v.`id_volontari_utenti` = u.id_utenti 
order by u.login_utenti asc


