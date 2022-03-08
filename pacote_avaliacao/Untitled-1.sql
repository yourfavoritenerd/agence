select user.co_usuario, user.no_usuario from cao_usuario user INNER JOIN permissao_sistema ps ON user.co_usuario = ps.co_usuario where ps.co_sistema=1 AND ps.in_ativo="S" AND (ps.co_tipo_usuario = 0 OR ps.co_tipo_usuario = 1 OR ps.co_tipo_usuario = 2);

select sum(valor)-((sum(valor)*sum(total_imp_inc))/100) as rliquida from cao_fatura WHERE co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = "anapaula.chiodaro") AND YEAR(data_emissao)=2007 AND MONTH(data_emissao) BETWEEN 1 AND 2;


SELECT user.co_usuario,sum(fatura.valor) as rliquida from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario;


SELECT user.co_usuario,(sum(fatura.valor)-(sum(fatura.valor)*(sum(fatura.total_imp_inc)/100))) as rliquida, SUM(fatura.total_imp_inc) from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario;


SELECT user.co_usuario,sum(fatura.valor),(sum(fatura.valor)*((sum(fatura.total_imp_inc)/count(*))/100)),(sum(fatura.valor)*((sum(fatura.total_imp_inc)/count(*))/100)) as rliquida, SUM(fatura.total_imp_inc) from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario WITH ROLLUP;


SELECT user.co_usuario,(sum(fatura.valor)*((sum(fatura.total_imp_inc)/count(*))/100)) as rliquida, salario.brut_salario  from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario inner JOIN cao_salario salario ON salario.co_usuario = user.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario WITH ROLLUP;


SELECT user.co_usuario,sum(fatura.valor),sum(fatura.total_imp_inc),(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)) as rliquida, salario.brut_salario as custofixo, sum(fatura.comissao_cn),count(*),
(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100)
as comissao, ((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)) - (salario.brut_salario+(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100)))  as lucro  from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario inner JOIN cao_salario salario ON salario.co_usuario = user.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario WITH ROLLUP;


SELECT user.co_usuario,DATE_FORMAT(fatura.data_emissao, "%Y-%M"),sum(fatura.valor),sum(fatura.total_imp_inc),(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)) as rliquida, salario.brut_salario as custofixo, sum(fatura.comissao_cn),count(*),
(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100)
as comissao, ((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)) - (salario.brut_salario+(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100)))  as lucro  from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario inner JOIN cao_salario salario ON salario.co_usuario = user.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario,DATE_FORMAT(fatura.data_emissao, "%Y-%M") WITH ROLLUP;


SELECT user.co_usuario,DATE_FORMAT(fatura.data_emissao, "%Y-%M") as mes, FORMAT((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)),2) as rliquida, FORMAT(salario.brut_salario,2) as custofixo, FORMAT((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100),2) as comissao, FORMAT(((sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100)) - (salario.brut_salario+(sum(fatura.valor)-((sum(fatura.total_imp_inc)/count(*))/100))*((sum(fatura.comissao_cn)/count(*))/100))),2) as lucro from cao_fatura fatura INNER JOIN cao_os os on os.co_os = fatura.co_os INNER JOIN cao_usuario user ON user.co_usuario = os.co_usuario inner JOIN cao_salario salario ON salario.co_usuario = user.co_usuario WHERE fatura.co_os IN (SELECT co_os FROM cao_os WHERE co_usuario = user.co_usuario) and YEAR(fatura.data_emissao)=2007 AND MONTH(fatura.data_emissao) BETWEEN 1 AND 2 GROUP BY USER.co_usuario,DATE_FORMAT(fatura.data_emissao, "%Y-%M") WITH ROLLUP;