def retornar_nota(estudiante):
    return estudiante[1]

lista_estudiante = [('Eduard', 4.2),
                    ('Pepe', 2.5),
                    ('Maria', 3.5),
                    ('Carlos', 4.5)]

# lista_ordenada = sorted(lista_estudiante, key=retornar_nota)

lista_ordenada = sorted(lista_estudiante, key=lambda estudiante: estudiante[1])

print(lista_ordenada)


# lambda x:x[1]

# lambda estudiante: estudiante[1]