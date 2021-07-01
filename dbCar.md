# Modellizzare la struttura di una tabella riguardanti delle auto usate.

## table name: cars

- ID                            BIGINT          PRIMARY KEY         NOTNULL         AUTO_INCREMENT      UNIQUE
- targa                         VARCHAR(10)                         NOTNULL                             UNIQUE
- telaio                        VARCHAR(17)                         NULL                                UNIQUE
- marca                         VARCHAR(30)                         NOTNULL IDX             
- modello                       VARCHAR(30)                         NOTNULL IDX
- anno_immatricolazione         DATE                                NULL
- descrizione                   TEXT                                NULL
- photo                         CARCHAR(255)                        NULL  DEFAULT('img/foto.jpg')
- colore                        VARCHAR(20)                         NOTNULL                   
- porte                         TINYINT                             NULL
- cilindrata                    VARCHAR(5)
- Kw - cv                       VARCHAR(10)
- km_percorsi                   MEDIUM                              NOTNULL
- unico_proprietario            TINYINT                             NULL
- alimentazione                 VARCHAR(30)                         NOTNULL
- consumi(combinato)            VARCHAR(10)
-        (urbano)               VARCHAR(10)
-        (extra_urbano)         VARCHAR(10)
- emissione                     TINYNIT                             NULL
- tipo_cambio                   VARCHAR(20)
- marce                         VARCHAR(15)
- prezzo                        DECIMAL(8,2)                        NULL
<!--campi indispensabili: note, creato, modifica-->
- note                          TEXT                                NULL
- created_at                    DATETIME
- update_at                     DATETIME
## equipaggiamento
### confort
- climatizzatore                TINYNIT
- alzacristalli elettrici       TINYNIT
- autoradio                     TINYNIT
- computer_di_bordo             TINYNIT
- interni                       VRACHAR(255)
## sicurezza
- abs                           TINYNIT
- airbag_conducente             TINYNIT
- airbag_passeggero             TINYNIT
- airbag_laterali               TINYNIT
- chiusura_centralizzata        TINYNIT
- fendinebbia                   TINYNIT
- servosterzo                   TINYNIT
- pilota_automatico             TINYNIT
- sensori_parcheggio            TINYNIT



