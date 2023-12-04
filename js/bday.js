function updateCountdown() {
    var now = new Date(); // Текущая дата и время
    var newYear = new Date(now.getFullYear(), 10, 16); // Дата и время 16 ноября текущего года
    var timeLeft = newYear - now; // Оставшееся время в миллисекундах

    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24)); // Количество оставшихся дней
    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)); // Количество оставшихся часов
    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60)); // Количество оставшихся минут
    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000); // Количество оставшихся секунд

    // Добавляем корректные окончания к значениям
    var daysText = days + " дней";
    if (days === 1) {
        daysText = days + " день";
    } else if (days < 1) {
        daysText = "";
    }

    var hoursText = hours + " часов";
    if (hours === 1) {
        hoursText = hours + " час";
    } else if (hours >= 2 && hours <= 4) {
        hoursText = hours + " часа";
    }

    var minutesText = minutes + " минут";
    if (minutes === 1) {
        minutesText = minutes + " минута";
    } else if (minutes >= 2 && minutes <= 4) {
        minutesText = minutes + " минуты";
    }

    var secondsText = seconds + " секунд";
    if (seconds === 1) {
        secondsText = seconds + " секунда";
    } else if (seconds >= 2 && seconds <= 4) {
        secondsText = seconds + " секунды";
    }

    // Выводим результат на экран
    document.getElementById('bday').innerHTML = daysText + " " + hoursText + " " + minutesText + " " + secondsText;
}

// Обновляем отсчет каждую секунду
setInterval(updateCountdown, 1000);
