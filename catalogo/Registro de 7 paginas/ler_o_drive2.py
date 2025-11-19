import codecs

# Abre o arquivo de entrada (que tem os '?')
with codecs.open("ArquivoDourado.txt", "r", encoding='utf-8') as f_in:
    conteudo = f_in.read()

# Substitui todas as interrogações pelo caractere quadrado
conteudo_corrigido = conteudo.replace('?', '□')

# Salva no novo arquivo com a codificação correta
with codecs.open("ArquivoDourado_Corrigido.txt", "w", encoding='utf-8') as f_out:
    f_out.write(conteudo_corrigido)

print("Arquivo corrigido salvo em ArquivoDourado_Corrigido.txt")