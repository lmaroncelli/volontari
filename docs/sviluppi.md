


SELECT v.* , u.login_utenti 
FROM `volontari` v join utenti u on v.`id_volontari_utenti` = u.id_utenti 
order by u.login_utenti asc

https://stackoverflow.com/questions/31847054/how-to-use-multiple-database-in-laravel


https://sujipthapa.co/blog/laravel-v55-login-register-with-username-or-email



https://jamesmcfadden.co.uk/custom-authentication-in-laravel-with-guards-and-user-service-providers

Authentication in Laravel is centered around guards which allow us to specify varying ways that a user can be authenticated.
The first thing we’ll do is add our own guard for authenticating volontari users. We can do this in /config/auth.php:



https://code.tutsplus.com/tutorials/how-to-create-a-custom-authentication-guard-in-laravel--cms-29667