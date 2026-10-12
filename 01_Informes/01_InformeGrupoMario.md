# Informe de Seguimiento Proyecto de Software 

**Fecha:** 6 de octubre de 2026 

**Periodo Evaluado:** 06/10 al 06/10/2026

**Destinatario:** Dirección Interna  

**Estado General del Proyecto:** 🟢 EN TIEMPO 

---

## 1. Resumen 

Durante la práctica realizada el 6 de octubre de 2026 se desarrolló el backend del bombo, el backend de un jugador con sus 3 cartones y la lógica de juego de un jugador y sus 3 cartones hasta que gane (falta probar el código de la lógica de juego y ver que funciona correctamente)

*URL de GituHub:* https://github.com/mariopropios/Bingo

---

## 2. Estado del Tablero Kanban (Métricas)

* **Tareas Completadas (Done):**  
    * Bombo con las 60 bolas extraídas en orden aleatorio y sin repetición (`bombo.php`).
    * Estructura de datos de 4 jugadores con 3 cartones cada uno (`jugador.php`).
    * Generación de los 3 cartones del jugador 1: matriz de 3 filas por 7 columnas con 15 números y 6 huecos.
    * Integración de bombo y jugador 1 (`conexionBomboJugador.php`): se extraen las bolas una a una y se tachan los números coincidentes en los cartones.

* **Trabajo en Progreso (WIP):** 
    * Comprobación de Bingo: ya se calcula si queda algún número sin tachar en los cartones, pero el resultado todavía no detiene la partida ni declara ganador.

* **Trabajo Pendiente (Backlog/To Do):** 
    * Generar cartones para los jugadores 2, 3 y 4 y jugar con los 4 a la vez.
    * Evitar números repetidos dentro de un mismo cartón y repartir los huecos para que cada fila tenga 5 números.
    * Detener la partida cuando un jugador complete su cartón y mostrar al ganador.
    * Mostrar las bolas y los cartones con las imágenes proporcionadas, en lugar de `var_dump`.

---

## 3. Entregables y Valor Aportado

* **Simulación del bombo (`bombo.php`):** genera las 60 bolas sin repetir, base del sorteo del juego.

* **Simulación del jugador con sus 3 cartones (`jugador.php`):** genera un jugador con sus 3 cartones.

* **Generación y marcado de cartones del jugador 1 (`conexionBomboJugador.php`):** prototipo funcional que reparte los cartones, extrae las bolas y tacha los números, validando el flujo principal del juego.

* **Repositorio en GitHub:** código editado y accesible para la revisión del profesor.

---

## 4. Próximos Objetivos (Próximo Periodo)
1. **Partida completa con 4 jugadores:** generar los 12 cartones y aplicar el marcado a todos los jugadores.
2. **Detección de Bingo y ganador:** detener el sorteo cuando un cartón quede completo y mostrar quién gana y en qué bola.
3. **Corrección de la generación de cartones y salida visual:** sin números repetidos, con 5 números por fila, mostrando las bolas con las imágenes del reto. A continuación, el juego de pruebas y el despliegue.