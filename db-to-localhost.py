import os
import re
import sys

dir_path = sys.argv[2]
opt = sys.argv[1]


def replace_db_with_localhost(file_path):
    try:
        with open(file_path, "r") as file:
            lines = file.readlines()

        with open(file_path, "w") as file:
            for line in lines:
                line = re.sub(r"\bdb\b", "localhost", line)
                file.write(line)

    except Exception as e:
        print(f"Error processing file: {file_path}")
        print(e)


def replace_localhost_with_db(file_path):
    try:
        with open(file_path, "r") as file:
            lines = file.readlines()

        with open(file_path, "w") as file:
            for line in lines:
                line = re.sub(r"\blocalhost\b", "db", line)
                file.write(line)

    except Exception as e:
        print(f"Error processing file: {file_path}")
        print(e)


def process_php_files(directory):
    for root, _, files in os.walk(directory):
        for file_name in files:
            if file_name.endswith(".php"):
                file_path = os.path.join(root, file_name)
                if opt == "-db":
                    replace_localhost_with_db(file_path)
                elif opt == "-localhost":
                    replace_db_with_localhost(file_path)


process_php_files(dir_path)
