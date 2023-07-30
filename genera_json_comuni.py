import os
import csv
import json

csv_filename = 'Elenco-comuni-italiani.csv'
csv_input = os.path.join(os.getcwd(), csv_filename)

with open(csv_input, mode='r') as csv_file:
	csv_reader = csv.DictReader(csv_file, delimiter=';', quotechar='"')
	line_count = 1
	output = [{
		"Codice Catastale del comune": row['Codice Catastale del comune'],
		"Denominazione comune": row['Denominazione in italiano'],
		"Codice Provincia": row['Codice Provincia (Storico)(1)'],
		"Denominazione provincia": row["Denominazione dell'Unità territoriale sovracomunale (valida a fini statistici)"],
		"Sigla provincia": row['Sigla automobilistica'],
		"Codice Regione": row['Codice Regione'],
		"Denominazione Regione": row['Denominazione Regione'],
		"Codice Comune formato numerico": row['Codice Comune formato numerico']
	} for row in csv_reader]
	with open('elenco_comuni.json', 'w', encoding='utf-8') as outfile:
		json.dump(output, outfile, sort_keys=True, indent=4)		