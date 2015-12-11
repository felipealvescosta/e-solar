/*
     Arduino Voltímetro
     Projeto Painel Solar com medidor de Tensao
     TCC Erika Nenes
 */

#include <LiquidCrystal.h>
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);
float lectura;
float voltaje=0;

void setup() { 
  lcd.begin(16, 2);
  lcd.setCursor(0,0);
  lcd.setCursor(5,0);
  lcd.print("Projeto");
  lcd.setCursor(5,1);
  lcd.print("E-Solar");
  delay(5000);
  lcd.clear();
  Serial.begin(9600);
}

void loop() {
  
   lectura_voltios(1,2);
   lcd.setCursor(0,0);
   lcd.print("Voltagem:");
   lcd.setCursor(13, 1);
   lcd.print("(V)");
   delay(500);
 
}
void lectura_voltios(float unidad, int decimales)
{
  lectura=analogRead(0);
  voltaje = ((5*float(lectura))/1024);
  lcd.setCursor(0, 1);
  lcd.print(float(voltaje)*3*unidad,decimales);
  delay(200);
}
