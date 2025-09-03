select
    `limac_portal`.`personal_limac`.`id_pl` AS `id_pl`,
    `limac_portal`.`personal_limac`.`personal_nombres` AS `personal_nombres`,
    `limac_portal`.`personal_limac`.`personal_apellido` AS `personal_apellido`,
    `limac_portal`.`cuenta_personal`.`user_personal` AS `user_personal`
from (
        `limac_portal`.`personal_limac`
        join `limac_portal`.`cuenta_personal` on (
            (
                `limac_portal`.`personal_limac`.`id_pl` = `limac_portal`.`cuenta_personal`.`id_personal`
            )
        )
    )
where (
        (
            `limac_portal`.`cuenta_personal`.`estado` = 'ACTIVO'
        )
        and (
            not(
                (
                    `limac_portal`.`personal_limac`.`personal_nombres` like '%diego%'
                )
            )
        )
    )
union all
select
    `limac_portal`.`admin_limac`.`id_al` AS `id_al`,
    `limac_portal`.`admin_limac`.`nombre` AS `nombre`,
    `limac_portal`.`admin_limac`.`apellidos` AS `apellidos`,
    `limac_portal`.`admin_limac`.`email` AS `email`
from `limac_portal`.`admin_limac`
where (
        (
            not(
                (
                    `limac_portal`.`admin_limac`.`nombre` like '%diego%'
                )
            )
        )
        and (
            not(
                (
                    `limac_portal`.`admin_limac`.`nombre` like '%jossy%'
                )
            )
        )
        and (
            `limac_portal`.`admin_limac`.`id_al` <> '1015'
        )
    )