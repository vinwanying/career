#python_version == '3.7'
def load_data(file):
    import pickle
    try:
        with open(file,'rb') as f:
            result = pickle.load(f)
    except:
        print('the file does not exist')
        return
    return result

def query_following(user_name):
    d, result = load_data('followers.pydata'), 0
    for i in d.values():
        if i.count(user_name) == 1:
            result += 1
    return result

def update():
    import pickle
    d = load_data('followers.pydata')
    d['William Smith'] += ['Lorna Carrico']
    d['Anne Smelcer'] = ['Christine Phillips', 'Charles Mason', 'Tim Lathrop']
    with open('followers-updated.pydata', 'wb') as f:
        pickle.dump(d, f)

def get_num_of_followers():
    result = load_data('followers-updated.pydata')
    for i, j in result.items():
        result[i] = len(j)
    return result
